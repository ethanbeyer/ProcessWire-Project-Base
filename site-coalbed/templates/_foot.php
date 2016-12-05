<?php

// Class Use Calls

/*
title
Content

/*
|==========================================================================
| Functions
|==========================================================================
*/


/*
|==========================================================================
| Variables
|==========================================================================
*/
$footer = $pages->get("/globals/foot");

/*
|==========================================================================
| View
|==========================================================================
*/
// Two indents because we're at the bottom of the page
?>
    </div> <!-- .wrapper -->

    <div class="footer-sticky">
        <?
        //
        // Color Band
        //
        ?>
        <div class="color-band-secondary"></div>

        <?
        //
        // Footer
        //
        ?>
        <footer id="footer">
            <div class="container">
                <?php echo $footer->Content; ?>
                <p>&copy; Ethan Beyer 2010-<?php echo date('Y'); ?></p>
            </div>
        </footer>
    </div>    

    <script src="/build/js/app.js"></script>
</body>
</html>