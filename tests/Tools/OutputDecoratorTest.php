<?php

namespace MikroTest\Tools;

use PHPUnit\Framework\TestCase;
use Mikro\Tools\OutputDecorator;

class OutputDecoratorTest extends TestCase
{
    /**
     * Semplice test di verifica della funzionalit√†
     */
    public function testString()
    {
        $string = <<<EOF
        Questo √® un contenuto testuale di test ora verifichiamo che
        il valore della costnate DEFAULT_SERVICE_NAME sia corretto:
        '{DEFAULT_SERVICE_NAME}' == 'Mikro'
EOF;

        $atteso = <<<EOF
        Questo √® un contenuto testuale di test ora verifichiamo che
        il valore della costnate DEFAULT_SERVICE_NAME sia corretto:
        'Mikro' == 'Mikro'
EOF;
        $this->assertEquals($atteso, OutputDecorator::decorate($string));
    }
}
