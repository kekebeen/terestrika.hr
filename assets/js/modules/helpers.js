exports.offset = function(elt) {
  var rect = elt.getBoundingClientRect(),
    bodyElt = document.body;

  return {
    top: rect.top + bodyElt.scrollTop,
    left: rect.left + bodyElt.scrollLeft
  };
};
