<?php
namespace Rizzen\DateTime;

/*
    (c) Rizzen Yazston

    This source file is subject to the license that is bundled
    with this source code in the file LICENSE.
*/

class DateTime {
    public function get() {
        return date( 'Y-m-d H:i:s' );
    }
}
