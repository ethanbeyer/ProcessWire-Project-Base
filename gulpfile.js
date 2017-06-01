/*
|==========================================================================
| Gulp Modules
|==========================================================================
|
| 
|
*/
var gulp    = require('gulp');
var $       = require('gulp-load-plugins')();
var merge   = require('merge-stream');

/*
|==========================================================================
| Setting Paths for Sourcing and Destination
|==========================================================================
*/
var $assets = {
        styles:     'site/scss/**/*.scss',
        scripts:    'site/js/**/*.js',
        fonts:      'site/fonts/**/*',
    },
    $bootstrap = 'node_modules/bootstrap/';


/**
|==========================================================================
| Delete the "build" Folder
|==========================================================================
*/
gulp.task('clean', function () {
    return gulp.src('build')
        .pipe($.clean({force:true}));
});


/*
|==========================================================================
| Styles Tasks
|==========================================================================
*/
gulp.task('styles', function(){
   
    // So size can be sent to gulp-notify
    const s = $.size();

    // .src is where the files come from that this file will use to build
    return gulp.src([
        $assets.styles
    ])

    // error reporting
    .pipe($.plumber({
        errorHandler: function (error) {
            console.log(error.message);
            this.emit('end');
        }
    }))

    // compilation of the SASS
    .pipe($.sass({
        // nested, expanded, compact, compressed
        outputStyle: "compressed",
        includePaths: [
            // this line lets you put the full relative path to a scss file from project root. no more "../../../"!
            "./",
            $bootstrap + "scss/",
        ]
    }))
    
    // autoprefixing the compiled CSS (these settings as currently defined by bootstrap)
    .pipe($.autoprefixer({
        browsers: [
            "Android 2.3",
            "Android >= 4",
            "Chrome >= 20",
            "Firefox >= 24",
            "Explorer >= 8",
            "iOS >= 6",
            "Opera >= 12",
            "Safari >= 6"
        ],
        cascade: false
    }))

    // get the size of the file created
    .pipe(s)

    // send the file to the directory
    .pipe(gulp.dest('build/css/'))
    
    // give user feedback
    .pipe($.notify({
        message: () => `Styles Merged! Size: ${s.prettySize}`,
        onLast: true
    }));
});

// Styles Minification for Production
gulp.task('styles:min', function(){
    const s = $.size();
    return gulp.src('build/css/*.css')
        .pipe($.cleanCss())
        .pipe(s)
        .pipe(gulp.dest('build/css/'))
        .pipe($.notify({
            message: () => `Styles Scrubbed! Size: ${s.prettySize}`,
            onLast: true
        }));
})

/*
|==========================================================================
| Scripts Task
|==========================================================================
*/
gulp.task('scripts', function(){

    var SCRIPTS = [
        // I wish there was a better way to do this, but there isn't!
        // Add all the scripts to bundle in here. Example:
        // 'node_modules/bootstrap/js/bootstrap.js',
        
        // site/assets/js
        'site/assets/js/**/*.js', 
    ];

    // So size can be sent to gulp-notify
    const s = $.size();

    // .src is where the files come from that this file will use to build
    return gulp.src(SCRIPTS)

    // uglify the scripts by mashing them together in a single line per script with single letters as variables
    .pipe($.uglify({
        //preserveComments: "license",
    }))

    // take all the uglified scripts and put them in one file
    .pipe($.concat('app.js'))

    // size of the file created
    .pipe(s)

    // save
    .pipe(gulp.dest('build/js/'))
    
    // give user feedback
    .pipe($.notify({
        message: () => `Scripts Merged! Size: ${s.prettySize}`,
        onLast: true
    }));
});

/*
|==========================================================================
| Fonts Task
|==========================================================================
*/
gulp.task('fonts', function() {
    
    // .src is where the files come from that this file will use to build
    return gulp.src([
        $assets.fonts,
        $bootstrap + 'fonts/**/*'
    ])

    // save
    .pipe(gulp.dest('build/fonts/'))

    // give user feedback
    .pipe($.notify({
        message: 'Fonts Copied, Locked and Loaded!',
        onLast: true
    }));
});

/*
|==========================================================================
| Watch Task
|==========================================================================
|
| Runs continuously on "gulp watch"
|
*/
gulp.task('watch', function() {
    gulp.watch($assets.styles, gulp.parallel('styles'));
    gulp.watch($assets.scripts, gulp.parallel('scripts'));
});

/*
|==========================================================================
| Default Task: No Cleaning
|==========================================================================
*/
gulp.task('default', gulp.parallel('styles', 'scripts', 'fonts'));

/*
|==========================================================================
| Build Task: With Cleaning
|==========================================================================
*/
gulp.task('build', gulp.series('clean', 'styles', 'styles:min', 'scripts', 'fonts'));