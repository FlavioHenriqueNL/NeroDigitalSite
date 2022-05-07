const 
    gulp = require('gulp'),
    sass = require('gulp-sass');

function compilarSass(){
    return gulp
        .src('css/sass/**/*.scss')
        .pipe(sass({
            //outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('assets/css/'));
}
gulp.task('sass', compilarSass);
gulp.task('watch', () =>{
    gulp.watch('assets/sass/**/*.scss', compilarSass);
});

gulp.task('default', gulp.parallel('sass','watch'));

