var gulp = require('gulp');
var uncss = require('gulp-uncss');
var glob = require('glob');



gulp.task('glob', function() {
    gulp.src('all.css')
        .pipe(uncss({
            html: glob.sync('clean-before/**/*.html')
        }))
        .pipe(gulp.dest('./out'));
});
