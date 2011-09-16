<?php
/*
Plugin Name: ListAuthors
Plugin URI: http://wordbook.creation-site-france.org/extension-listauthors-wordpress/
Description: Extension simple pour WordPress, permettant de lister les 10 auteurs les plus actifs.
Author: JulienWBK
Version: 1.0
Author URI: http://wordbook.creation-site-france.org/
License: GPL2
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/** Fonction permettant de lister tous les auteurs */
function la_auteurs() {
wp_list_authors('show_fullname=1&optioncount=1&orderby=post_count&order=DESC&number=10');
}
add_shortcode("listauthors", "la_auteurs");
/** Fin du script PHP de l'extension ListAuthors */
?>