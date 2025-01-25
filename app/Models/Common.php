<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Common extends Model
{
    use HasFactory;

    public function checkDuplicate($tableName, $all_condition, $another_condition)
    {
        $query = DB::table($tableName)->where($all_condition);

        if ($another_condition !== '') {
            $query->where($another_condition);
        }

        $result = $query->get();

        return $result->isNotEmpty();
    }

    public function update_status($tbl, $primaryKeyValue, $data)
    {
        $primaryKey = DB::getSchemaBuilder()->getColumnListing($tbl)[0];
        $affected = DB::table($tbl)->where($primaryKey, $primaryKeyValue)->update($data);
        return $affected > 0;
    }
    public function checkOtp($tableName, $all_condition)
    {
        $query = DB::table($tableName)->where($all_condition)
            ->where('status', 0)
            ->where('otp_end_date', '>', now()); // Assuming 'otp_end_date' is a column in your table

        $result = $query->get();

        if ($result->isNotEmpty()) {
            DB::table($tableName)->where($all_condition)->update(['status' => 0]);
        }

        return $result->isNotEmpty();
    }
}
