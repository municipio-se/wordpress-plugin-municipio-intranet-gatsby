<?php

add_action("acf/init", function () {
  acf_add_options_page([
    "page_title" => __("Sidebar", "municipio-intranet-gatsby"),
    "menu_title" => __("Sidebar", "municipio-intranet-gatsby"),
    "menu_slug" => "municipio-intranet-sidebar-settings",
    "capability" => "edit_posts",
    "parent_slug" => "themes.php",
    "show_in_graphql" => true,
    "graphql_field_name" => "municipioIntranetSidebarSettings",
  ]);

  acf_add_local_field_group([
    "key" => "group_municipio_intranet_sidebar",
    "title" => __("Available tools", "municipio-intranet-gatsby"),
    "fields" => [
      [
        "key" => "field_municipio_intranet_sidebar_tools",
        "label" => __("Available tools", "municipio-intranet-gatsby"),
        "name" => "tools",
        "type" => "repeater",
        "show_in_graphql" => true,
        "layout" => "table",
        "button_label" => __("Add tools", "municipio-intranet-gatsby"),
        "sub_fields" => [
          [
            "key" => "field_municipio_intranet_sidebar_tools_name",
            "label" => __("Name", "municipio-intranet-gatsby"),
            "name" => "label",
            "type" => "text",
            "show_in_graphql" => true,
          ],
          [
            "key" => "field_municipio_intranet_sidebar_tools_url",
            "label" => __("URL", "municipio-intranet-gatsby"),
            "name" => "url",
            "type" => "url",
            "show_in_graphql" => true,
          ],
        ],
      ],
    ],
    "location" => [
      [
        [
          "param" => "options_page",
          "operator" => "==",
          "value" => "municipio-intranet-sidebar-settings",
        ],
      ],
    ],
    "show_in_graphql" => true,
    "graphql_field_name" => "tools",
  ]);
});
