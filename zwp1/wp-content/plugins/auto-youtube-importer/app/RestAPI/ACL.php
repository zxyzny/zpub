<?php

namespace YoutubeImporterSecondLine\RestAPI;

use WP_Error;

class ACL {

  public static function admin_dismiss_notice() {
    if ( !current_user_can( YOUTUBE_IMPORTER_SECONDLINE_SETTINGS_PERMISSION_CAP ) ) {
      return new WP_Error(
        'rest_forbidden',
        sprintf( __( 'You are not allowed to %s.', 'auto-youtube-importer' ), YOUTUBE_IMPORTER_SECONDLINE_SETTINGS_PERMISSION_CAP ),
        [
          'status' => 401
        ]
      );
    }

    return true;
  }

  public static function import_feed() {
    if ( !current_user_can( YOUTUBE_IMPORTER_SECONDLINE_SETTINGS_PERMISSION_CAP ) ) {
      return new WP_Error(
        'rest_forbidden',
        sprintf( __( 'You are not allowed to %s.', 'auto-youtube-importer' ), YOUTUBE_IMPORTER_SECONDLINE_SETTINGS_PERMISSION_CAP ),
        [
          'status' => 401
        ]
      );
    }

    return true;
  }

  public static function sync_feed() {
    if ( !current_user_can( YOUTUBE_IMPORTER_SECONDLINE_SETTINGS_PERMISSION_CAP ) ) {
      return new WP_Error(
        'rest_forbidden',
        sprintf( __( 'You are not allowed to %s.', 'auto-youtube-importer' ), YOUTUBE_IMPORTER_SECONDLINE_SETTINGS_PERMISSION_CAP ),
        [
          'status' => 401
        ]
      );
    }

    return true;
  }

}