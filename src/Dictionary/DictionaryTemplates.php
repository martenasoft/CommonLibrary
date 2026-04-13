<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

class DictionaryTemplates
{
    public const int MAIN_INDEX = 1;
    public const int COLUMNS_INDEX = 2;
    public const int IMAGE_LEFT_INDEX = 3;
    public const int IMAGE_RIGHT_INDEX = 4;
    public const int ROUND_INDEX = 5;

    public const string MAIN_TITLE = 'Main';
    public const string COLUMNS_TITLE = 'Columns';
    public const string IMAGE_LEFT_TITLE = 'Image left';
    public const string IMAGE_RIGHT_TITLE = 'Image right';
    public const string ROUND_TITLE = 'Round';

    public const string MAIN_IMAGE = 'main-type.png';
    public const string COLUMNS_IMAGE = 'columns-type.png';
    public const string IMAGE_LEFT_IMAGE = 'image-left.png';
    public const string IMAGE_RIGHT_IMAGE = 'image-right.png';
    public const string ROUND_IMAGE = 'round-items.png';

    public const array CHOICE = [
        self::MAIN_TITLE => self::MAIN_INDEX,
        self::COLUMNS_TITLE => self::COLUMNS_INDEX,
        self::IMAGE_LEFT_TITLE => self::IMAGE_LEFT_INDEX,
        self::IMAGE_RIGHT_TITLE => self::IMAGE_RIGHT_INDEX,
        self::ROUND_TITLE => self::ROUND_INDEX,
    ];

    public const array IMAGES = [
        self::MAIN_INDEX => self::MAIN_IMAGE,
        self::COLUMNS_INDEX => self::COLUMNS_IMAGE,
        self::IMAGE_LEFT_INDEX => self::IMAGE_LEFT_IMAGE,
        self::IMAGE_RIGHT_INDEX => self::IMAGE_RIGHT_IMAGE,
        self::ROUND_INDEX => self::ROUND_IMAGE,
    ];
}