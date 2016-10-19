/* IMPORT MODULES */
var gulp = require('gulp');
var sass = require('gulp-sass');


/* DECLARE TASKS */
gulp.task( 'default', [ 'sass', 'watch' ], function() {
    console.log( 'INSIDE TASK: `default`' );
} );

gulp.task( 'sass', function() {
    console.log( 'INSIDE TASK: `sass`' );

    return gulp.src( 'sass/styles.scss' )
        .pipe( sass(
            {
                outputStyle: 'expanded'
            }).on( 'error', sass.logError )
        )
        .pipe( gulp.dest( 'css/' ) ); 
} );

gulp.task( 'watch', function() {
    console.log( 'INSIDE TASK: `watch`' );

    gulp.watch( 'sass/**/*.scss', [ 'sass' ] );
} );
