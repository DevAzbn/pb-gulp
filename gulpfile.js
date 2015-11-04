var gulp = require('gulp'),
	
	autoprefixer = require('gulp-autoprefixer'),		// префиксы для css
	browserSync = require('browser-sync').create(),		// перезагрузка браузера
		reload = browserSync.reload,
	concat = require('gulp-concat'),					// склейка файлов
	less = require('gulp-less'),						// LESS
	minifyCss = require('gulp-minify-css'),				// минификация css
	//myth = require('gulp-myth'),						// префиксы для css - по умолчанию не установлен
	rename = require('gulp-rename'),					// переименование файлов
	rigger = require('gulp-rigger'),					// инклуд html
	uglify = require('gulp-uglify'),					// сжатие js
	watch = require('gulp-watch');						// наблюдение за изменением файловой системы


var params = {
	build : 'site',
	src : 'site/html',
};
params.pages = [
	'index.html',
];

gulp.task('default', ['server', 'build' ]);

gulp.task('server', function(){
	browserSync.init({
		server : params.build,
	});
	
	gulp.watch('*.html', ['html']);
	gulp.watch('*.less', ['less']);
});

gulp.task('build', ['html', 'less', ]);

gulp.task('html', function(){
	params.pages.forEach(function(item){
		gulp.src(params.src + '/' + item)
			.pipe(rename(item))
			.pipe(gulp.dest(params.build))
			.pipe(reload({stream : true,}))
		;
	});
});

gulp.task('less', function(){
	gulp.src([params.build + '/block/**/*.less', ])
		.pipe(concat('gulp-import.less'))
		.pipe(gulp.dest(params.build + '/css/site'))
		//.pipe(reload({stream : true,}))
	;
});