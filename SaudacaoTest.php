<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class SaudacaoTest extends TestCase {
    public function testSaudacao() {
        $this->assertEquals("Olá, João!", saudacao("João"));
        $this->assertEquals("Olá, Maria!", saudacao("Maria"));
    }
}
?>
