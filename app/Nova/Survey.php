<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Status;

//use OwenMelbz\RadioField\RadioButton;

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
            Text::make('fullname')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('phone')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('age')
                ->sortable()
                ->rules('required', 'max:255'),
            // RadioButton::make('gender')
            //     ->options([
            //     'Male' => 'Male',
            //     'Female' => 'Female',
            // ]),
            // Boolean::make('Status'),
            // Boolean::make('Fence')->hideFromIndex(),


            BelongsTo::make('Town')->searchable(),
            DateTime::make('Created at')->exceptOnForms(),
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
            // (new Metrics\TotalSurvey)
            // ->canSee(function ($request) {
            //     return $request->user()->can('update-users', $this);
            // }),
            // (new Metrics\SurveyPerDay),            
            // (new Metrics\SurveyAgeGroup),
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
