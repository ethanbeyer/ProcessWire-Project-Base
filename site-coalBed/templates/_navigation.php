<?php

$menu = $modules->get('MarkupMenuBuilder');

$primary_menu_options = array(
    'wrapper_list_type' => 'ul',                    //ul, ol, nav, div, etc.
    'list_type' => 'li',                            //li, a, span, etc.
    'menu_css_id' => '',                            //a CSS ID for the menu
    'menu_css_class' => 'nav navbar-nav',           //a CSS Class for the menu
    'submenu_css_class' => '',                      //CSS Class for sub-menus
    'has_children_class' => '',                     //CSS Class for any menu item that has children
    'first_class'=>'',                              //CSS Class for the first item in 
    'last_class' => '',
    'current_class' => 'active',
    'default_title' => 0,                           //0=show saved titles;1=show actual/current titles
    'include_children' => 4,                        //show 'natural' MB non-native descendant items as part of navigation
    'm_max_level' => 1,                             //how deep to fetch 'include_children'
    'current_class_level' => 1,                     //how high up the ancestral tree to apply 'current_class'
    'default_class' => 'nav-item',                  //a CSS class to apply to all menu items
    'default_link_class' => 'nav-link'              //a CSS class applied to all links within menu items
    );