//เรียก gulp 
//if cant run "gulp" take this on terminal 'npm install -g gulp'
var gulp = require('gulp');



// เรียก plug in ของ gulp

//copy file
var gulpCopy = require('gulp-copy');
// var otherGulpFunction = require('gulp-other-function');

//css
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var gulp = require('gulp');
// var cleanCSS = require('gulp-clean-css');

//js
var concat = require('gulp-concat');



var BASE = {
	src: 'assets/frontend/src/',
	dist: 'assets/frontend/dist/'
};


//------var path

//กอปภาพ
var copyimage = {
	src: [

		'./' + BASE.src + 'styles/image/*.{gif,jpg,png,svg,jpeg}',

	]
};

var copyimagetoSomewhere = {
	dist:  

        './' + BASE.dist + 'styles/image',
    
       
        
};


//กอปฟ้อน
var copyfont = {
	src: [

		'./' + BASE.src + 'styles/font/*.{ttf,woff,woff2}',
	]
};

var copyfonttoSomewhere = {
	dist:  

        './' + BASE.dist + 'styles/font',
    
       
        
};





var sassFiles = {
	src: './' + BASE.src + 'styles/scss/**/*.scss',
};

var cssDest = {
	dist: './' + BASE.dist + 'styles/css',

};



var JsPath = {
	dist: './' + BASE.dist + 'styles/js',
};

//js file

var Js = {
	src: [

		//vender
	
		'./' + BASE.src + 'styles/js/vender/jquery-3.3.1.min.js',
		'./' + BASE.src + 'styles/js/vender/smooth-scrollbar.js',
		'./' + BASE.src + 'styles/js/vender/shuffle.js',
		'./' + BASE.src + 'styles/js/vender/slick.js',
	

		//Js      
		'./' + BASE.src + 'styles/js/test.js',
		'./' + BASE.src + 'styles/js/navbar.js',
		'./' + BASE.src + 'styles/js/slick-news.js',
		// './' + BASE.src + 'assets/styles/js/scrollsmooth.js',
		// './' + BASE.src + 'assets/styles/js/slick-c.js',
	],


	filename: 'main.js',
};



// กำหนดว่าจะให้ autoprefixer ใส่ vendor prefixes เพื่อรองรับ browser รุ่นไหนบ้าง
var browser_support = [
	'ie >= 9',
	'ie_mob >= 10',
	'ff >= 31',
	'chrome >= 36',
	'safari >= 6',
	'ios >= 6',
	'android >= 4'
];





//compile  copy


gulp.task('copyimage', function () {
	gulp.src(copyimage.src)
		.pipe(gulp.dest(copyimagetoSomewhere.dist));
});

gulp.task('copyfont', function () {
	gulp.src(copyfont.src)
		.pipe(gulp.dest(copyfonttoSomewhere.dist));
});


// gulp.task('copy', function () {
//     return gulp
//     .src(whereCopy)
//     .pipe(gulpCopy(copytoSomewhere, options))
//     .pipe(otherGulpFunction())
//     .dest(copytoSomewhere);
// });


//compile  sass to css

gulp.task('sass', function () {
	gulp.src(sassFiles.src)
		.pipe(sass().on('error', sass.logError))
		// ใส่ vendor prefixes ให้ไฟล์เหล่านั้น โดยใช้ autoprefixer
		.pipe(autoprefixer(browser_support))
		.pipe(gulp.dest(cssDest.dist));
});



//-- compact js to filename
gulp.task('combineJs', function () {
	return gulp.src(Js.src)
		.pipe(concat(Js.filename))
		.pipe(gulp.dest(JsPath.dist));
});

// watch changing all time
gulp.task('watch', function () {
	gulp.watch(sassFiles.src, ['sass']);
    gulp.watch(Js.src, ['combineJs']);
    gulp.watch(copyimage.src, ['copyimage']);
    gulp.watch(copyfont.src, ['copyfont']);
	// gulp.watch(cssDest.dist + '/main.css', ['minifyCss']);
});


//copy file 












// var uglify = require('gulp-uglify');
// var pump = require('pump');

// gulp.task('compress', function (cb) {
//     pump([
//             gulp.src(Js.srcformin),
//             uglify(),
//             gulp.dest('./' + BASE.src + 'assets/styles/js/minify')
//         ],
//         cb
//     );
// });

gulp.task('default', ['sass', 'combineJs','copyimage','copyfont', 'watch'], function () {

});


//minify css
// gulp.task('minifyCss', () => {
//     return gulp.src(cssDest.dist + '/main.css')
//         .pipe(cleanCSS({
//             compatibility: 'ie8'
//         }))
//         .pipe(gulp.dest(cssDest.dist));
// });
