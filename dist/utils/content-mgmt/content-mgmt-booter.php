<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*


require_once "blogposts/blog-fetcher.php";

require_once "menu/menu-fetcher.php";
require_once "news/news-fetcher.php";
require_once "drivingforce/driving-fetcher.php";
require_once "team/team-fetcher.php";
require_once "services/services-fetcher.php";
require_once "menu/menu-fetcher.php";
require_once "services/services-fetcher.php";

require_once "projects/projects-fetcher.php";

*/

require_once "team/team-fetcher.php";

function getContentsBetween($str, $startDelimiter, $endDelimiter) {
    $contents = array();
    $startDelimiterLength = strlen($startDelimiter);
    $endDelimiterLength = strlen($endDelimiter);
    $startFrom = $contentStart = $contentEnd = 0;
    while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
      $contentStart += $startDelimiterLength;
      $contentEnd = strpos($str, $endDelimiter, $contentStart);
      if (false === $contentEnd) {
        break;
      }
      $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
      $startFrom = $contentEnd + $endDelimiterLength;
    }

    return $contents;
  }
