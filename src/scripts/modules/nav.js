import $ from 'jquery';

const nav = name => {
  const tn = $('.toggle-nav');
  const navigation = $('.nav');

  $(tn).on('click', function() {
  	$(navigation).slideToggle();
  	return false;
  });
};
export default nav;
