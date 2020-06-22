<?php

namespace App\Exports;

use App\Survey;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;

class SurveyExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Survey::all();
    }

    /**
     * @return array|string[]
     */
    public function headings(): array
    {
        return [
            'id',
            'questionnaire_id',
            'gender',
            'residential_area',
            'family_status',
            'household_size',
            'marital_status	',
            'work_status',
            'health',
            'age',
            'accepting_own_mistakes',
            'controlling_desire',
            'likening_same_for_other',
            'completing_task_work_wisely',
            'standing_on_principles',
            'monthly_basic_income',
            'monthly_part_time_income',
            'annual_incom_from_other_sources',
            'suggestion',
            'wellbeing_total_question_score',
            'wellbeing_obtain_score',
            'status',
            'created_at',
            'updated_at',

        ];
    }

}
