import $ from 'jquery';

const scrollBox = name => {
  const boxS = $('.box-accomplishments');

  $(boxS).mCustomScrollbar({
  	scrollbarPosition: "inside"
  });
};
export default scrollBox;
