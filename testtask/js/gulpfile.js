const gulp = require('gulp');
const sass = require('gulp-sass');
const sourceMaps = require('gulp-sourcemaps');
const watch = require('gulp-watch');


gulp.task('sass-compile',function(){
    return gulp.src('../scss/**/*.scss')
    .pipe(sourceMaps.init())
    .pipe(sass().on('error',sass.logError))
    .pipe(sourceMaps.write('../'))
    .pipe(gulp.dest('../css/'))
})

gulp.task('watch',function(){
    gulp.watch('../scss/**/*.scss', gulp.series('sass-compile'))

})
