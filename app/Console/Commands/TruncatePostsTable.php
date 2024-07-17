<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;

class TruncatePostsTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:truncate-posts-table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    DB::table('posts')->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    $this->info('The posts table has been truncated and IDs have been reset.');
}



}
