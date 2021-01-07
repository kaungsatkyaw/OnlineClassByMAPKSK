class DeleteRecords extends Command
{
    protected $signature = 'delete-records';

    public function handle()
    {
        DB::table('some-table')->where('created_at', '<=', Carbon::now()->subDay())->delete();
    }
}