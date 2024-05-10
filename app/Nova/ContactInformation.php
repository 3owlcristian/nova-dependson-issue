<?php

namespace App\Nova;

use App\Models\PostalInfo;
use Dniccum\PhoneNumber\PhoneNumber;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\FormData;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ContactInformation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ContactInformation>
     */
    public static $model = \App\Models\ContactInformation::class;

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
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        //Select dependson issue
        $counties = \App\Models\County::select('id', 'name')->get();
        $counties_arr = [];
        foreach ($counties as $key => $counties) {
            $counties_arr[$counties->id] = $counties->name . ' ' . $counties->surname;
        }

        return [
            Text::make(__('Email'), 'email'),
            PhoneNumber::make('Phone', 'phone')->format('###-###-####')->disableValidation()->nullable()
            ,
            PhoneNumber::make('Fax', 'fax')->format('###-###-####')->disableValidation()->nullable(),
            Text::make(__('Address Line 1'), 'address_1'),
            Text::make(__('Address Line 2'), 'address_2'),
            Text::make(__('Zip'), 'zip'),
            Text::make(__('City'), 'city')->dependsOn(
                'zip',
                function ($field, $request, $formData) {
                    if (@$formData['zip']) {
                        $zip = str_pad($formData['zip'], 6, '0', STR_PAD_LEFT);
                        $postal_info = PostalInfo::where('zip', $zip)->first();
                        if (@$postal_info) {
                            $field->setValue($postal_info->city);
                        }

                    }
                }
            ),
            Select::make(__('State'), 'state')->options(config('states'))->searchable()->hideFromIndex()->hideFromDetail()->nullable()->displayUsingLabels()->dependsOn(
                ['zip'],
                function (Select $field, NovaRequest $request, FormData $formData) {
                    if (@$formData['zip']) {
                        $zip = str_pad($formData['zip'], 6, '0', STR_PAD_LEFT);
                        $postal_info = PostalInfo::where('zip', $zip)->first();
                        if (@$postal_info) {
                            $field->setValue($postal_info->state);
                        }

                    }
                }
            ),

            Select::make(__('County'), 'county_id')->options($counties_arr)->searchable()->nullable()->hideFromDetail()->dependsOn(
                'zip',
                function (Select $field, NovaRequest $request, FormData $formData) {
                    if (@$formData['zip']) {
                        $zip = str_pad($formData['zip'], 6, '0', STR_PAD_LEFT);
                        $postal_info = PostalInfo::where('zip', $zip)->first();
                        if (@$postal_info) {
                            $field->setValue($postal_info->county_id);
                        }

                    }
                }
            ),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
