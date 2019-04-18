<?php
/**
 * filter: unset endpoint
 */
function api_unsetEndpoints($endpoints)
{
  // remove target
  $targetEndpoint = [
    '/wp/v2/users',
    '/wp/v2/users/(?P<id>[\d]+)'
  ];
  foreach ($targetEndpoint as $path) {
    if (isset($endpoints[$path])) unset($endpoints[$path]);
  }
  return $endpoints;
}
add_filter('rest_endpoints', 'api_unsetEndpoints', 10, 1);
