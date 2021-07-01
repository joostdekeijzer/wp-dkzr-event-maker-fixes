<?php
/**
 * Plugin Name: Event Maker fixes for PHP7.1+
 * Version: 1.0
 * Description: Fix PHP7.1+ issues in Event Maker plugin
 * Author: Joost de Keijzer
 * Author URI: https://dkzr.nl
 * Plugin URI: https://dkzr.nl
 * Update URI: https://api.dkzr.nl/wp/update-check/
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */
class dkzrEventMakerFixes {
	public function __construct() {
		add_action( 'pre_get_posts', [ $this, 'pre_get_posts' ] );
	}

/**
 * Events_Maker_Query::pre_get_posts expects the meta_query default output
 * to be an array.
 */
	public function pre_get_posts( $query ) {
		if ( ! isset( $query->query_vars[ 'meta_query' ] ) ) {
			$query->query_vars[ 'meta_query' ] = [];
		}
	}
}
$dkzrEventMakerFixes = new dkzrEventMakerFixes();
