<?php
require_once 'phpqrcode.php';

class QRcode {
    public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint = false, $back_color = 0xFFFFFF, $fore_color = 0x000000) {
        QRcode::png($text, $outfile, $level, $size, $margin, $saveandprint, $back_color, $fore_color);
    }
}