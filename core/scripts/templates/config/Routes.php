<?php

/**
 * Routes
 *
 * @see <a href="http://wibeset.com/lity/routes">Routes</a>
 */

// Everything that match <urlbase>controller/action (ex: http://example.com/blog/add)
router()->add(':controller/:action', array());

// Everything that match <urlbase>controller (ex: http://example.com/blog)
router()->add(':controller', array('action' => 'index'));

// Everything else
router()->add('(.)', array('controller' => 'home', 'action' => 'index'));
