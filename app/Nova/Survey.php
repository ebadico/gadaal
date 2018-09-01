<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Status;
use App\Nova\Metrics;
use Spatie\ModelStatus\HasStatuses;
use OwenMelbz\RadioField\RadioButton;

use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Survey extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Survey';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */

    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','fullname',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('fullname')->hideWhenUpdating(),
            Text::make('phone')->hideWhenUpdating(),
            Text::make('age')
                ->sortable()
                ->hideWhenUpdating(),
            Text::make('Gender')->hideWhenUpdating(),
            BelongsTo::make('Town')->searchable()->hideWhenUpdating(),
            BelongsTo::make('Status'),
            DateTime::make('Created at')->ShowOnlyDetails(),
            DateTime::make('Updated at')->ShowOnlyDetails(),

          new Panel('Infrastructure', $this->Infrastructure()),
          new Panel('Finance', $this->Finance()),
          new Panel('Quantity', $this->Quantity()),
          new Panel('Access', $this->Access()),
          new Panel('Health', $this->Health()),
          new Panel('Violence', $this->Violence()),



    ];
           
    }


  
    protected function Infrastructure()
        {
            return [

                Text::make('Is there any water leakage?', 'leak')
                     ->ShowOnlyDetails(),
                Text::make('Is there any missing handler?','key')
                     ->ShowOnlyDetails(),
                Text::make('Is there any broken tap','tap')
                     ->ShowOnlyDetails(),
                Text::make('fence')
                     ->ShowOnlyDetails(),
                Text::make('gate')
                     ->ShowOnlyDetails(),
            ];
        }

    protected function Finance()
        {
            return [
                Text::make('Is the water expensive?', 'price')
                    ->ShowOnlyDetails(),
                Text::make('how much is 20 litre??','pjirgaan')
                    ->ShowOnlyDetails(),
                Text::make('Have you paid any extra cash to get your water?','extracash')->ShowOnlyDetails(),
                Text::make('Was this a bribe or something reasonable?','bribe')
                    ->ShowOnlyDetails(),
                Text::make('Was it a lot of money??','alotofmoney')
                    ->ShowOnlyDetails(),
                Text::make('is the extra money kept at the kiosk?','kept')
                    ->ShowOnlyDetails(),
                Text::make('Do you have any Income?','income')
                    ->ShowOnlyDetails(),
                Text::make('Do you receive the water receipt','invoice')
                    ->ShowOnlyDetails(),
                Text::make('is there any cheating at the water point?','cheating')
                    ->ShowOnlyDetails(),
                
            ];
        }

    protected function Quantity()
        {
            return [

                Text::make('Does the water have a taste?', 'taste')
                    ->ShowOnlyDetails(),
                Text::make('Is the tap water dirty??','dirtywater')
                    ->ShowOnlyDetails(),
                Text::make('Is the water hard when washing clothes?','hardwater')
                    ->ShowOnlyDetails(),
                Text::make('Is the water slow during the day','slowwater')
                    ->ShowOnlyDetails(),
                Text::make('Do all you four taps work at the same time?','fourtaps')
                    ->ShowOnlyDetails(),   
            ];
        }

    protected function Access()
        {
            return [

                Text::make('Is the kiosk dark at night?', 'light')
                    ->ShowOnlyDetails(),
                Text::make('Is the tap water dirty??','gatelocked')
                    ->ShowOnlyDetails(),
                Text::make('is the gate locked more often?','hardwater')
                    ->ShowOnlyDetails(),
                Text::make('Is the water kiosk far from you more than 500 Meter','faraway')
                    ->ShowOnlyDetails(),
                Text::make('Do you wait the kiosk line more than 15 munites?','longer')
                    ->ShowOnlyDetails(),
                Text::make('Do you wait the kiosk line more than 15 munites?','waitingtime')
                    ->ShowOnlyDetails(),
                Text::make('the kiosk attendant doesnt allow kids?','toaccess')
                    ->ShowOnlyDetails(),
                Text::make('Is the kiosk overcrowded?','overcrowded')
                    ->ShowOnlyDetails(), 
            ];
        }

    protected function Health()
        {
            return [
                Text::make('Do you drink the kiosk  water?', 'drink')
                    ->ShowOnlyDetails(),
                Text::make('Do you feel headache after drinking the water?', 'headache')
                    ->ShowOnlyDetails(),
                Text::make('Do you have diarrhea when you drink the kiosk water?','sick')
                    ->ShowOnlyDetails(),
                Text::make('Do you feel stomachache after drinking the water??','stomachache')
                    ->ShowOnlyDetails(),
                Text::make('Do you have diarrhea when you drink the kiosk water','diarrhea')
                    ->ShowOnlyDetails(),
            ];
        }

    protected function Violence()
        {
            return [
                Text::make('Have you faced any security problem while fetching water?', 'security')
                    ->ShowOnlyDetails(),
                Text::make('Gender', 'sgender')
                    ->ShowOnlyDetails(),
                Text::make('Do you face security problem during the night?','securitynight')
                    ->ShowOnlyDetails(),
                Text::make('Do you face security problem during the Day?','securityday')
                    ->ShowOnlyDetails(),
                
            ];
        }
    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [

            (new Metrics\NewSurveys)->width('1/2'),
            // (new Metrics\TotalSurvey)
            // ->canSee(function ($request) {
            //     return $request->user()->can('update-users', $this);
            // }),
            // (new Metrics\SurveyPerDay),            
            (new Metrics\SurveyAgeGroup)->width('1/2'),
            // (new Metrics\SurveyStatus),
            // //SurveyStatus
            // //->width('1/2')
            
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [

        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
                new DownloadExcel,

        ];
    }
}
