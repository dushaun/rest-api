<?php

foreach (glob('/Controllers/*.php') as $controller) {
    require  __DIR__ . $controller;
}