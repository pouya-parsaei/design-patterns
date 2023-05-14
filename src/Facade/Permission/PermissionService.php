<?php

namespace Src\Facade\Permission;

class PermissionService
{
    public function __construct(
        private JudiciaryPermission $judiciaryPermission,
        private PolicePermission    $policePermission,
        private TaxPermission       $taxPermission
    )
    {

    }

    public function validate(string $nationalCode)
    {
        $judiciaryResult = $this->judiciaryPermission->validate($nationalCode);

        $policeResult = $this->policePermission->validate($nationalCode);

        $taxResult = $this->taxPermission->validate($nationalCode);

        return $judiciaryResult && $policeResult && $taxResult;
    }
}
