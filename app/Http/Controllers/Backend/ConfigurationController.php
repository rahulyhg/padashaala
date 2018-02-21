<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Configuration;
use Illuminate\Http\Request;
use File;
use Storage;

class ConfigurationController extends Controller
{
	public function getConfiguration()
	{
		return view('settings.index');
	}

    public function postConfiguration(Request $request)
    {
    	$inputs = $request->only(
    		'site_title',
    		'site_description',
    		'site_primary_email',
    		'site_secondary_email',
    		'site_primary_phone',
    		'site_secondary_phone',
    		'site_address',
    		'order_email',
    		'site_logo',
    		'site_favicon',
    		'enable_tax',
    		'tax_percentage',
    		'who_we_are',
    		'our_mission',
    		'our_vision',
    		'our_support',
    		'our_help',
    		'facebook_link',
    		'twitter_link',
    		'googleplus_link',
    		'instagram_link',
    		'youtube_link',
    		'footer_logo',
    		'payments_logo',
    		'copyright',
    		'ad',
    		'keywords',
    		'description'
    	);

    	foreach ( $inputs as $inputKey => $inputValue ) {
    	if ( $inputKey == 'site_logo' || $inputKey == 'site_favicon' || $inputKey == 'footer_logo' || $inputKey == 'payments_logo' || $inputKey == 'ad' ) {
				$file = $inputValue;
				// Delete old file
				$this->deleteFile( $inputKey );
				// Upload file & get store file name
				$fileName   = $this->uploadFile( $file );
				$inputValue = 'settings/' . $fileName;
			}

			if ( $inputKey == 'products_section_1' || $inputKey == 'products_section_2' || $inputKey == 'products_section_3' || $inputKey == 'products_section_4' ) {
				$inputValue = json_encode( $inputValue );
			}		
			Configuration::updateOrCreate( [ 'configuration_key' => $inputKey ], [ 'configuration_value' => $inputValue ] );
		}

		// Update tax
		$enableTax = !array_key_exists("enable_tax", $inputs) ? 0 : 1;
		Configuration::updateOrCreate( [ 'configuration_key' => 'enable_tax' ], [ 'configuration_value' => $enableTax ] );

		return redirect()->back()->with( 'success', 'Settings successfully updated!!' );
    }

    protected function uploadFile( $file ) {
		// Store file
		$path = Storage::put( 'public/settings', $file, 'public' );
		// Get stored file name
		$fileName = explode( 'public/settings/', $path );

		// File name
		return $fileName[1];
	}

	protected function deleteFile( $inputKey ) {
		$configuration = Configuration::where( 'configuration_key', '=', $inputKey )->first();
		// Check if configuration exists
		if ( null !== $configuration && $configuration->exists() ) {
			$fullPath = storage_path( 'app/public' ) . '/' . $configuration->configuration_value;
			if ( File::exists( $fullPath ) ) {
				// File exists
				File::delete( $fullPath );
			}
		}
	}
}
