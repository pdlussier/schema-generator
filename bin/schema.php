<?php

/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use SchemaOrgModel\Command\ExtractCardinalitiesCommand;
use SchemaOrgModel\Command\DumpConfigurationCommand;
use SchemaOrgModel\Command\GenerateEntitiesCommand;

define('SCHEMA_ORG_JSON_ALL_URL', 'http://schema.rdfs.org/all.json');
define('GOOD_RELATIONS_OWL_URL', 'http://purl.org/goodrelations/v1.owl');

$application = new Application();
$application->add(new ExtractCardinalitiesCommand());
$application->add(new DumpConfigurationCommand());
$application->add(new GenerateEntitiesCommand());
$application->run();