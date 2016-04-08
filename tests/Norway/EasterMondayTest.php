<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\Norway;

use DateTime;
use DateTimeZone;

/**
 * Class containing tests for Easter Monday in Norway.
 */
class EasterMondayTest extends NorwayBaseTestCase
{
    /**
     * The name of the holiday to be tested
     */
    const HOLIDAY = 'easterMonday';

    /**
     * Tests the holiday defined in this test.
     */
    public function testHoliday()
    {
        $year = 2355;
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year,
            new DateTime("$year-4-4", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests translated name of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::REGION, self::HOLIDAY, $this->generateRandomYear(),
            ['nb_NO' => 'Andre påskedag']);
    }
}
