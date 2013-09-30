<?php
$I = new WebGuy($scenario);
$I->wantTo('Laravel App: perform actions and see result');
$I->amOnPage('/');
$I->see('Laravel Test App');

$I->click('Events');
$I->seeLink('Create Event');
$I->seeLink('Create Event', '/addEvent');
$I->click('Create Event');
$I->amOnPage('/addEvent');
$I->see('Create New Event');
