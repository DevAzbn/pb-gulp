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

var root = 'rybka',//'site',
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


gulp.task('default', ['server', 'dev' ]);
gulp.task('dev', ['dev:html', 'dev:js', 'dev:css' ]);
gulp.task('production', ['production:html', 'production:js', 'production:css' ]);

gulp.task('server', function(){
	browserSync.init({
		server : path.build.root,
	});
	
	gulp.watch(path.src.html + '/**/*.html', ['dev:html']);
	
	gulp.watch(path.src.js + '/**/*.js', ['dev:js']);
	
	gulp.watch(path.build.css + '/**/*.less', ['dev:css']);
});




gulp.task('dev:html', function(){
	gulp.src(path.src.html + '/**/*.html')
		//.pipe(rigger())
		.pipe(pagebuilder(path.build.root))
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream : true,}))
	;
});

gulp.task('dev:js', function(){
	gulp.src(path.src.js + '/**/*.js')
		//.pipe(rigger())
		.pipe(pagebuilder(path.build.root))
		.pipe(gulp.dest(path.build.js))
		.pipe(reload({stream : true,}))
	;
});

gulp.task('dev:css', function(){
	gulp.src(path.build.css + '/site.less')
		.pipe(less())
		.pipe(autoprefixer({
			browsers: ['> 2% in RU', 'last 4 version', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'],	//last 2 versions '> 0%'
			cascade: true,
		}))
		.pipe(gulp.dest(path.build.css))
		.pipe(reload({stream : true,}))
	;
});



gulp.task('production:html', function(){
	gulp.src(path.src.html + '/**/*.html')
		//.pipe(rigger())
		.pipe(pagebuilder(path.build.root))
		.pipe(gulp.dest(path.build.html))
	;
});

gulp.task('production:js', function(){
	gulp.src(path.src.js + '/**/*.js')
		//.pipe(rigger())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(gulp.dest(path.build.js))
	;
});

gulp.task('production:css', function(){
	gulp.src(path.build.css + '/site.less')
		.pipe(less())
		.pipe(autoprefixer({
			browsers: ['> 2% in RU', 'last 4 version', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'],	//last 2 versions '> 0%'
			cascade: true,
		}))
		.pipe(minifyCss())
		.pipe(gulp.dest(path.build.css))
	;
});