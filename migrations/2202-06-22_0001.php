<?php declare(strict_types=1);

use Crate\Core\Contracts\MigrationContract;
use Crate\Core\Database\Migrations\Migrator;
use Crate\Core\Database\Scheme;

return new class implements MigrationContract
{

    /**
     * @inheritDoc
     */
    public function title(): string
    {
        return 'Create migrations scheme';
    }

    /**
     * @inheritDoc
     */
    public function install(Migrator $migrator)
    {

        $migrator->create('collections', function (Scheme $scheme) {

        });

    }

    /**
     * @inheritDoc
     */
    public function uninstall(Migrator $migrator)
    {

        $migrator->delete('migrations');
        
    }

};
