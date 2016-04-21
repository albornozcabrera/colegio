<?php

namespace Colegio\Repositories;

use Colegio\Entities\Profile;

class ProfileRepo extends BaseRepo {

    public function getModel() {
        return new Profile;
    }

}
