var gulp = require('gulp'),
	
	autoprefixer = require('gulp-autoprefixer'),		// префиксы для css
	browserSync = require('browser-sync').create(),		// перезагрузка браузера
		reload = browserSync.reload,
	concat = require('gulp-concat'),					// склейка файлов
	less = require('gulp-less'),						// LESS
	//	watchLess = require('gulp-watch-less'),				
	minifyCss = require('gulp-minify-css'),				// минификация css
	//myth = require('gulp-myth'),						// префиксы для css - по умолчанию не установлен
	rename = require('gulp-rename'),					// переименование файлов
	//rigger = require('gulp-rigger'),					// инклуд html
	uglify = require('gulp-uglify'),					// сжатие js
	watch = require('gulp-watch'),						// наблюдение за изменением файловой системы
	pagebuilder = require('gulp-pagebuilder');			// умный инклуд html с поддержкой вложенности и передачей параметров

var root = 'site',
	src = root + '/' + 'src';

var path = {
	build : {
		root : root,
		html : root,
		css : root + '/css',
		js : root + '/js',
		img : root + '/img',
	},
	src : {
		root : src,
		html : src + '/html',
		css : src + '/css',
		js : src + '/js',
		img : src + '/img',
	},
	block : {
		root : root + '/block',
	}
};

/*
params.pages = [
	'index.html',
];
*/

gulp.task('default', ['server', 'build' ]);

gulp.task('server', function(){
	browserSync.init({
		server : path.build.root,
	});
	
	gulp.watch(path.src.html + '/**/*.html', ['build:html']);
	
	//gulp.watch(path.build.css + '/**/*.less', ['build:less']);
	//gulp.watch(path.block.root + '/**/*.less', ['build:less']);
	
	gulp.watch(path.src.js + '/**/*.js', ['build:js']);
	gulp.watch(path.block.root + '/**/.*.js', ['build:js']);
	
	gulp.watch(path.build.css + '/**/*.less', ['build:css']);
});

gulp.task('build', ['build:html', 'build:js', 'build:css' ]);

gulp.task('build:html', function(){
	gulp.src(path.src.html + '/**/*.html')
		//.pipe(rigger())
		.pipe(pagebuilder(path.build.root))
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream : true,}))
	;
});

gulp.task('build:js', function(){
	gulp.src(path.src.js + '/**/*.js')
		//.pipe(rigger())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(gulp.dest(path.build.js))
		.pipe(reload({stream : true,}))
	;
});

gulp.task('build:css', function(){
	gulp.src(path.build.css + '/site.less')
		.pipe(less())
		.pipe(autoprefixer({
			browsers: ['last 6 versions'],
			cascade: true,
		}))
		.pipe(minifyCss())
		.pipe(gulp.dest(path.build.css))
		.pipe(reload({stream : true,}))
	;
});

/*
gulp.task('build:less', function(){
	gulp.src([path.block.root + ])
		.pipe(watchLess('gulp-import.less'))
		.pipe(concat('gulp-import.less'))
		.pipe(gulp.dest(path.build.css + '/site'))
		.pipe(reload({stream : true,}))
	;
});
*/