'use strict';

module.exports = function buildTask(gulp, plugins, config) {
  gulp.task('clean', () => plugins.del([config.dest.base]));

  gulp.task(
    'build',
    plugins.sequence(
      'clean',
      'styles-build',
      'scripts-build',
      'vendor-build'
    )
  );
};
