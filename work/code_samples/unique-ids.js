export default class UniqueUnitIdValidator extends BasicMapValidator {
validate() {
  const mapSvg = this.mapRef.current.children[0];

  // When Illustrator exports mulitple shapes with the same name, 
  // it gives each shape a unique ID (ex: original-name-2),
  // and adds a data-name attribute with the shape's original name. 
  // So, any shape with a data-name attribute is a duplicate.
  const shapesArr = [...mapSvg.querySelectorAll(`[data-name^="u-"]`)];

  // Count how many duplicates there are of each shape name
  let duplicateIds = {};
  shapesArr.forEach( shape => {
  if ( !duplicateIds[shape.dataset.name] ) {
  // Illustrator only adds data-name to the second shape with the same name,
  // so we start the count at 2 to include the first shape with that name.
  duplicateIds[shape.dataset.name] = 2; 
  } else {
  duplicateIds[shape.dataset.name] = duplicateIds[shape.dataset.name] + 1;
  }
  });

  let result = {};
  if ( isNotEmpty(duplicateIds) ) {
  // Make human-friendly text to identify duplicate shapes: u-G5001 x3
  let duplicatesText = Object.keys(duplicateIds).map( id => `${id} x${duplicateIds[id]}`);
  result = {
  type: 'error',
  msg: `Duplicate unit shape IDs found: ${duplicatesText}`
  };
  } else {
  result = {
  type: 'success',
  msg: `All unit shapes have unique IDs.`
  };
  }

  return result;
  }
}