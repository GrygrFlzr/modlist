<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('version_types', function ($table)
{
	$table->increments('id');
	$table->string('type');
	$table->timestamps();

	$table->unique('type');
});

Capsule::schema()->create('versions', function ($table)
{
	$table->increments('id');
	$table->string('version');
	$table->string('version_major');
	$table->string('version_minor');
	$table->string('title');
	$table->integer('alias')->nullable()->default(null);
	$table->integer('type')->references('id')->on('version_types');
	$table->text('description');
	$table->boolean('homepage')->default(0);
	$table->boolean('public')->default(0);
	$table->boolean('accepting')->default(0);
	$table->timestamps();

	$table->unique('version');
});

Capsule::schema()->create('mods', function ($table)
{
	$table->increments('id');
	$table->string('slug');
	$table->boolean('approved')->default(0);
	$table->timestamps();
});

Capsule::schema()->create('mod_versions', function ($table)
{
	$table->increments('id');
	$table->integer('mod_id')->references('id')->on('mods');
	$table->integer('version_id')->references('id')->on('versions');
	$table->string('title');
	$table->text('description')->nullable()->default(null);
	$table->text('link');
	$table->text('link_source')->nullable()->default(null);
	$table->boolean('forge')->default(0);
	$table->integer('release')->references('id')->on('release')->nullable();
	$table->text('notes')->nullable()->default(null);
	$table->boolean('approved')->default(0);
	$table->timestamps();
});

Capsule::schema()->create('mod_version_dependencies', function ($table)
{
	$table->integer('mod_version_id')->references('id')->on('mod_versions');
	$table->integer('dependency_id')->references('id')->on('mod_versions');
	$table->integer('order')->default(1);
	$table->text('notes')->nullable()->default(null);
	$table->timestamps();
});

Capsule::schema()->create('mod_tags', function ($table)
{
	$table->integer('mod_version_id')->references('id')->on('mod_versions');
	$table->string('tag');
	$table->integer('order')->default(1);
	$table->text('notes')->nullable()->default(null);
	$table->boolean('approved')->default(0);
	$table->timestamps();
});

Capsule::schema()->create('types', function ($table)
{
	$table->increments('id');
	$table->string('title');
	$table->text('description');
	$table->string('class');
	$table->timestamps();
});

Capsule::schema()->create('mod_version_types', function ($table)
{
	$table->integer('mod_version_id')->references('id')->on('mod_versions');
	$table->integer('type_id')->references('id')->on('types');
	$table->integer('order')->default(1);
	$table->timestamps();
});

Capsule::schema()->create('releases', function ($table)
{
	$table->increments('id');
	$table->string('title');
	$table->text('description');
	$table->string('class');
	$table->timestamps();
});

Capsule::schema()->create('authors', function ($table)
{
	$table->increments('id');
	$table->string('name');
	$table->string('slug');
	$table->text('about');
	$table->timestamps();
});

Capsule::schema()->create('mod_authors', function ($table)
{
	$table->integer('mod_version_id')->references('id')->on('mod_versions');
	$table->integer('author_id')->references('id')->on('author');
	$table->text('meta')->nullable()->default(null);
	$table->timestamps();
});

Capsule::schema()->create('changelog_types', function ($table)
{
	$table->increments('id');
	$table->string('type');
	$table->timestamps();

	$table->unique('type');
});

Capsule::schema()->create('changelogs', function ($table)
{
	$table->increments('id');
	$table->integer('type')->references('id')->on('changelog_types');
	$table->string('item_type');
	$table->integer('item_id');
	$table->text('description');
	$table->text('notes');
	$table->boolean('visible')->default(1);
	$table->timestamps();
});

Capsule::schema()->create('link_types', function ($table)
{
	$table->increments('id');
	$table->string('type');
	$table->text('description');
	$table->timestamps();

	$table->unique('type');
});

Capsule::schema()->create('links', function ($table)
{
	$table->increments('id');
	$table->integer('type')->references('id')->on('link_types');
	$table->string('title');
	$table->string('owner_type');
	$table->integer('owner_id');
	$table->text('notes');
	$table->boolean('visible')->default(1);
	$table->timestamps();
});

