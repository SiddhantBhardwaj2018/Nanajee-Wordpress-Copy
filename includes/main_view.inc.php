<?php

function getNavbar(){
    echo "<nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\">
    <a class=\"menu-toggle\">Menu</a>
    <a class=\"skip-link screen-reader-text\" href=\"#content\"
      >Skip to content</a
    >

    <div class=\"menu-primary-container\">
      <ul id=\"menu-primary\" class=\"apostrophe-navigation\">
      <li
      id=\"menu-item-53\"
      class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-53\"
    >
      <a href=\"index.php\">Home</a>
    </li>
        <li
          id=\"menu-item-173\"
          class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-173\"
        >
          <a href=\"overview.php\">Overview</a>
          <ul class=\"sub-menu\">
            <li
              id=\"menu-item-54\"
              class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-54\"
            >
              <a href=\"responsibilities.php\">Responsibilities</a>
            </li>
          </ul>
        </li>
        <li
          id=\"menu-item-17\"
          class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-17\"
        >
          <a href=\"research.php\">Research</a>
          <ul class=\"sub-menu\">
            <li
              id=\"menu-item-65\"
              class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-65\"
            >
              <a href=\"publications.php\">Publications</a>
            </li>
            <li
              id=\"menu-item-39\"
              class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-39\"
            >
              <a href=\"doctoralStudents.php\">Students supervised</a>
            </li>
          </ul>
        </li>
        <li
          id=\"menu-item-19\"
          class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-19\"
        >
          <a href=\"conference.php\">Colloquium &amp; Conference</a>
        </li>
        <li
          id=\"menu-item-42\"
          class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-42\"
        >
          <a href=\"recognition.php\">Recognition</a>
        </li>
        <li
          id=\"menu-item-53\"
          class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-53\"
        >
          <a href=\"advisors.php\">Advisors</a>
        </li>
        <li
        id=\"menu-item-53\"
        class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-53\"
      >
        <a href=\"photoGallery.php\">Photos</a>
      </li>
      <li
        id=\"menu-item-53\"
        class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-53\"
      >
        <a href=\"videoGallery.php\">Videos</a>
      </li>
       
      </ul>
    </div>
  </nav>";
}