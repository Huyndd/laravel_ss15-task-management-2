<?php

use App\Tasks;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $task = new Tasks();
//        $task->id               = 1;
//        $task->name            = "huy";
//        $task->email            = "huy@gmail.com";
//        $task->address          = "lang son";
//        $task->save();

        $task = new Tasks();
        $task->id               = 2;
        $task->name            = "hieu";
        $task->email            = "hieu@gmail.com";
        $task->address          = "ha nam";
        $task->save();
    }
}
