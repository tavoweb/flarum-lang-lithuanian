<?php

/*
 * This file is part of the flarum-lang-lithuanian.
 *
 * Copyright (c) 2022 Mindaugas Bartusevičius <mindaugas@bartusevicius.eu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
	new Flarum\Extend\LanguagePack(),
	(new Flarum\Extend\Frontend('forum'))->css(__DIR__ . '/less/main.less'),
];
