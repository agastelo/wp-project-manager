<?php

use Illuminate\Database\Capsule\Manager as Capsule;

use CPM\Core\Database\Abstract_Migration as Migration;

class Create_Comments_Table extends Migration {
    public function schema() {
        Capsule::schema()->create( 'cpm_comments', function( $table ) {
            $table->increments( 'id' );

            $table->text( 'content' );
            $table->string( 'mentioned_users' )->nullable();
            $table->unsignedInteger( 'commentable_id' );
            $table->string( 'commentable_type' )->nullable();

            $table->unsignedInteger( 'project_id' );
            $table->unsignedInteger( 'created_by' );
            $table->unsignedInteger( 'updated_by' );

            $table->timestamps();
        });
    }
}