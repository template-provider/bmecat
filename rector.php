<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitSelfCallRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitThisCallRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\JMSSetList;
use Rector\Symfony\Set\SymfonySetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withFileExtensions(['php'])
    ->withSets([
        LevelSetList::UP_TO_PHP_83,
        SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES,
        JMSSetList::ANNOTATIONS_TO_ATTRIBUTES,
        SetList::TYPE_DECLARATION,
        PHPUnitSetList::PHPUNIT_100,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
        PHPUnitSetList::ANNOTATIONS_TO_ATTRIBUTES,
    ])
    ->withRules([
        PreferPHPUnitSelfCallRector::class,
    ])
    ->withSkip([
        PreferPHPUnitThisCallRector::class,
        RenameClassRector::class,
        AddOverrideAttributeToOverriddenMethodsRector::class,
    ]);
