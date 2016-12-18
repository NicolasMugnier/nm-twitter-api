<?php

use \Symfony\Component\DependencyInjection\Reference;
use \Symfony\Component\DependencyInjection\Definition;

// Client
$container->register('twitter_api_client', '\Twitter\Api\Client');

// Collections
$container->register('twitter_api_collections_get_list', '\Twitter\Api\Collections\GetList')
    ->addArgument(new Reference('twitter_api_client'));

$container->register('twitter_api_collections_get_show', '\Twitter\Api\Collections\GetShow')
    ->addArgument(new Reference('twitter_api_client'));

$container->register('twitter_api_collections_post_create', '\Twitter\Api\Collections\PostCreate')
    ->addArgument(new Reference('twitter_api_client'));

$container->register('twitter_api_collections_post_destroy', '\Twitter\Api\Collections\PostDestroy')
    ->addArgument(new Reference('twitter_api_client'));

$container->register('twitter_api_collections_post_entries_add', '\Twitter\Api\Collections\PostEntriesAdd')
    ->addArgument(new Reference('twitter_api_client'));

// Friends
$container->register('twitter_api_friends_get_ids', '\Twitter\Api\Friends\GetIds')
    ->addArgument(new Reference('twitter_api_client'));

// Commands
$container->register('friends_get_ids', '\Twitter\Cmd\FriendsGetIds')
    ->addArgument(new Reference('twitter_api_friends_get_ids'));
$container->register('collections_get_list', '\Twitter\Cmd\CollectionsGetList')
    ->addArgument(new Reference('twitter_api_collections_get_list'));
