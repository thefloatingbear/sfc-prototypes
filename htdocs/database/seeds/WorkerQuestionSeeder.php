<?php

use App\QuestionCategory;
use App\QuestionGroup;
use App\QuestionSection;
use Illuminate\Database\Seeder;

class WorkerQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now()->toDateTimeString();

        $category = QuestionCategory::where('slug', 'worker')->first();
        $sections = QuestionSection::get();
        $groups = QuestionGroup::get();

        // Worker...

        // Personnel
        $personnel =  $sections->where('slug', 'personal-details')->first();

        // 31.
        $question = factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'basic-details')->first()->id,
            'number' => '31',
            'label' => 'Name / Worker ID',
            'question' => 'How would you like to identify this record?',
            'help_text' => 'This is for your reference only',
            'field' => 'UNIQUEWORKERID',
            'field_type' => 'text',
            'validation' => 'required|max:50',
            'order' => 1,
            'hidden_at' => null,
            'mandatory_at' => $now
        ]);

        // 56-1.
        /*
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'personal-details')->first()->id,
            'number' => '56-1',
            'label' => 'Parental Leave',
            'question' => 'Is this worker on parental leave?',
            'help_text' => null,
            'field' => 'PARENTALLEAVE',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => null
        ]);
        */

        // 32.
        $question = factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'personal-information')->first()->id,
            'number' => '32',
            'label' => 'NI Number',
            'question' => 'What\'s their national insurance number?',
            'help_text' => null,
            'field' => 'NINUMBER',
            'field_type' => 'text',
            'validation' => 'nullable|ni_number',
            'order' => 3,
            'hidden_at' => null
        ]);

        // 33.
        $question = factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'personal-information')->first()->id,
            'number' => '33',
            'label' => 'Postcode',
            'question' => 'What\'s their home postcode?',
            'help_text' => null,
            'field' => 'POSTCODE',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 4,
            'hidden_at' => null
        ]);

        // 34.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'personal-information')->first()->id,
            'number' => '34',
            'label' => 'Date of Birth',
            'question' => 'What\'s their date of birth?',
            'help_text' => null,
            'field' => 'DOB',
            'field_type' => 'date',
            'validation' => 'nullable|date|age_between',
            'order' => 5,
            'hidden_at' => null
        ]);

        // 35.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'gender-disability-ethnicity')->first()->id,
            'number' => '35',
            'label' => 'Gender Identity',
            'question' => 'What is their gender?',
            'help_text' => null,
            'field' => 'GENDER',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 36.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'gender-disability-ethnicity')->first()->id,
            'number' => '36',
            'label' => 'Disability Identification',
            'question' => 'Do they identify as having a disability?',
            'help_text' => null,
            'field' => 'DISABLED',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => null
        ]);

        // 37.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'gender-disability-ethnicity')->first()->id,
            'number' => '37',
            'label' => 'Ethnic Identity',
            'question' => 'What is their ethnic identity?',
            'help_text' => null,
            'field' => 'ETHNICITY',
            'field_type' => 'select',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => null
        ]);

        // 38.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'nationality')->first()->id,
            'number' => '38',
            'label' => 'Nationality',
            'question' => 'Are they British?',
            'help_text' => null,
            'field' => 'NATIONALITY',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 39.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'nationality')->first()->id,
            'number' => '39',
            'label' => 'British Citizenship?',
            'question' => 'Do they hold British citizenship?',
            'help_text' => null,
            'field' => 'BRITISHCITIZENSHIP',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => $now
        ]);

        // 40.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'nationality')->first()->id,
            'number' => '40',
            'label' => 'Nationality (not British)',
            'question' => 'If not British, what is their nationality?',
            'help_text' => null,
            'field' => 'NATIONALITY-1',
            'field_type' => 'select',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => $now
        ]);

        // 41.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'place-of-birth')->first()->id,
            'number' => '41',
            'label' => 'Born in UK?',
            'question' => 'Were they born in the UK?',
            'help_text' => null,
            'field' => 'COUNTRYOFBIRTH',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => $now
        ]);

        // 42.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'place-of-birth')->first()->id,
            'number' => '42',
            'label' => 'Country of Birth',
            'question' => 'What country were they born in?',
            'help_text' => null,
            'field' => 'COUNTRYOFBIRTH-1',
            'field_type' => 'select',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => $now
        ]);

        // 43.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $personnel->id,
            'question_group_id' => $groups->where('slug', 'place-of-birth')->first()->id,
            'number' => '43',
            'label' => 'Arrived in UK',
            'question' => 'What year did they arrive in the UK?',
            'help_text' => null,
            'field' => 'YEAROFENTRY',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => $now
        ]);


        // Employment
        $employment =  $sections->where('slug', 'employment-details')->first();

        // 44
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'contract-type')->first()->id,
            'number' => '44',
            'label' => 'Employment Status',
            'question' => 'What is their employment status?',
            'help_text' => null,
            'field' => 'EMPLSTATUS',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => null
        ]);

        // 45
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'contract-type')->first()->id,
            'number' => '45',
            'label' => 'Date started main job',
            'question' => 'What date did they start their main job?',
            'help_text' => null,
            'field' => 'STARTDATE',
            'field_type' => 'date',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => null
        ]);

        // 46
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'experience')->first()->id,
            'number' => '46',
            'label' => 'Recruited from',
            'question' => 'Where were they recruited from?',
            'help_text' => null,
            'field' => 'RECSOURCE',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => null
        ]);

        // 47
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'experience')->first()->id,
            'number' => '47',
            'label' => 'Date started in the adult social care sector',
            'question' => 'When did they start working in the adult social care sector?',
            'help_text' => null,
            'field' => 'STARTINSECT',
            'field_type' => 'date',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);


        // 48.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'basic-details')->first()->id,
            'number' => '48',
            'label' => 'Main Job Role',
            'question' => 'What is their main job role?',
            'help_text' => null,
            'field' => 'MAINJOBROLE',
            'field_type' => 'select',
            'validation' => 'required',
            'order' => 2,
            'hidden_at' => null,
            'mandatory_at' => $now
        ]);

        // 49.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'basic-details')->first()->id,
            'number' => '49',
            'label' => 'Additional Job Roles',
            'question' => 'Do they do any additional work?',
            'help_text' => null,
            'field' => 'OTHERJOBROLE',
            'field_type' => 'select',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => null,
            'mandatory_at' => $now
        ]);

        // 50.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'contract-type')->first()->id,
            'number' => '50',
            'label' => 'Zero-hours contract',
            'question' => 'Do they have a contract with no guaranteed hours?',
            'help_text' => null,
            'field' => 'ZEROHRCONT',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 6,
            'hidden_at' => null
        ]);

        // 51.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'pay-and-hours')->first()->id,
            'number' => '51',
            'label' => 'Hours contracted to work per week',
            'question' => 'How many hours are they contracted to work per week?',
            'help_text' => null,
            'field' => 'CONTHOURS',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 52.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'pay-and-hours')->first()->id,
            'number' => '52',
            'label' => 'Additional hours last week',
            'question' => 'How many additional hours did they work in the last week?',
            'help_text' => null,
            'field' => 'ADDLHOURS',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => null
        ]);

        // 52-1.
        /*
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'zero-hours-contract-details')->first()->id,
            'number' => '52-1',
            'label' => 'Average hours per week',
            'question' => 'What are their average weekly hours?',
            'help_text' => null,
            'field' => 'AVHOURS',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);
        */

        // 53.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'contract-type')->first()->id,
            'number' => '53',
            'label' => 'Employment Status',
            'question' => 'What type of contract do they have?',
            'help_text' => null,
            'field' => 'FULLTIME',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 5,
            'hidden_at' => null
        ]);

        // 54.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'pay-and-hours')->first()->id,
            'number' => '54',
            'label' => 'Salary interval',
            'question' => 'How are they paid?',
            'help_text' => null,
            'field' => 'SALARYINT',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 12,
            'hidden_at' => null
        ]);

        // 55.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'pay-and-hours')->first()->id,
            'number' => '55',
            'label' => 'Salary / Hourly rate',
            'question' => 'What is their rate of pay?',
            'help_text' => null,
            'field' => 'SALARY',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => null
        ]);

        // 56.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $employment->id,
            'question_group_id' => $groups->where('slug', 'sick-leave')->first()->id,
            'number' => '56',
            'label' => 'Days sick in the last 12 months',
            'question' => 'How many sickness days have they taken in the last 12 months?',
            'help_text' => null,
            'field' => 'DAYSSICK',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);



        // Learning and dev.
        $learning =  $sections->where('slug', 'learning-development')->first();

        // 59.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $learning->id,
            'question_group_id' => $groups->where('slug', 'care-certificate')->first()->id,
            'number' => '59',
            'label' => 'Engaged in Care Certificate',
            'question' => 'Have they started or completed a care certificate?',
            'help_text' => null,
            'field' => 'CARECERT',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 60.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $learning->id,
            'question_group_id' => $groups->where('slug', 'care-certificate')->first()->id,
            'number' => '60',
            'label' => 'Date achieved',
            'question' => 'When did they complete it?',
            'help_text' => null,
            'field' => 'CARECERTDATE',
            'field_type' => 'date',
            'validation' => 'nullable|date',
            'order' => 2,
            'hidden_at' => $now
        ]);

        // 61.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $learning->id,
            'question_group_id' => $groups->where('slug', 'apprenticeship')->first()->id,
            'number' => '61',
            'label' => 'Apprenticeship',
            'question' => 'Are they doing training as part of an apprenticeship?',
            'help_text' => null,
            'field' => 'APPRENTICE',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 62.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $learning->id,
            'question_group_id' => $groups->where('slug', 'social-care-qualifications')->first()->id,
            'number' => '62',
            'label' => 'Qualification relevant to social care',
            'question' => 'Do they hold a qualification relevant to social care?',
            'help_text' => null,
            'field' => 'SCQUAL',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 63.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $learning->id,
            'question_group_id' => $groups->where('slug', 'social-care-qualifications')->first()->id,
            'number' => '63',
            'label' => 'Highest social care qualification',
            'question' => 'What is the highest level of their social care qualification?',
            'help_text' => 'View the gov.uk guidance on qualification levels',
            'field' => 'SCQUAL-1',
            'field_type' => 'select',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => $now
        ]);

        // 64.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $learning->id,
            'question_group_id' => $groups->where('slug', 'other-qualifications')->first()->id,
            'number' => '64',
            'label' => 'Non-social care qualifications',
            'question' => 'Do they hold any other qualifications?',
            'help_text' => null,
            'field' => 'NONSCQUAL',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 65.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $learning->id,
            'question_group_id' => $groups->where('slug', 'other-qualifications')->first()->id,
            'number' => '65',
            'label' => 'Highest non-social care qualification?',
            'question' => 'What is the highest level of their qualification?',
            'help_text' => 'View the gov.uk guidance on qualification levels',
            'field' => 'NONSCQUAL-1',
            'field_type' => 'select',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => $now
        ]);

        // Training
        $training =  $sections->where('slug', 'training')->first();

        // 67-1.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $training->id,
            'question_group_id' => $groups->where('slug', 'add-training')->first()->id,
            'number' => '67-1',
            'label' => 'Add training',
            'question' => 'Do you want to add training for this worker?',
            'help_text' => null,
            'field' => 'TRAINING',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 1,
            'hidden_at' => null
        ]);

        // 67-2.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $training->id,
            'number' => '67-2',
            'label' => 'Select category',
            'question' => 'Select category',
            'help_text' => null,
            'field' => 'TRAINING-1',
            'field_type' => 'select',
            'validation' => 'nullable',
            'order' => 2,
            'hidden_at' => $now
        ]);

        // 67-2.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $training->id,
            'number' => '67-3',
            'label' => 'Name of training',
            'question' => 'Name of training',
            'help_text' => null,
            'field' => 'TRAININGNAME',
            'field_type' => 'text',
            'validation' => 'nullable',
            'order' => 3,
            'hidden_at' => $now
        ]);

        // 67-3.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $training->id,
            'number' => '67-3',
            'label' => 'Date completed:',
            'question' => 'Date completed:',
            'help_text' => null,
            'field' => 'TRAININGDATECOMPLETED',
            'field_type' => 'date',
            'validation' => 'nullable',
            'order' => 4,
            'hidden_at' => $now
        ]);

        // 67-3.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $training->id,
            'number' => '67-4',
            'label' => 'Expiry date:',
            'question' => 'Expiry date:',
            'help_text' => null,
            'field' => 'TRAININGDATEEXPIRY',
            'field_type' => 'date',
            'validation' => 'nullable',
            'order' => 5,
            'hidden_at' => $now
        ]);

        // 67-4.
        factory(App\Question::class)->create([
            'question_category_id' => $category->id,
            'question_section_id' => $training->id,
            'number' => '67-4',
            'label' => 'Accredited?',
            'question' => 'Is this training accredited?',
            'help_text' => null,
            'field' => 'TRAININGACCREDITED',
            'field_type' => 'radio-list',
            'validation' => 'nullable',
            'order' => 6,
            'hidden_at' => $now
        ]);
    }
}
