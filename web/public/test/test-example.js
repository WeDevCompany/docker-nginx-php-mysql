// test-5.js

const { add, subtract } = require( '../src/mathFunctions' )

test( 'Adds 2 positive numbers', () => {
  const result = add( 2, 3 )
  const expected = 5
  expect( result ).toBe( expected )
} )

test( 'Adds 2 negative numbers', () => {
  const result = add( -2, -3 )
  const expected = -5
  expect( result ).toBe( expected )
} )

test( 'Subtracts 2 positive numbers', () => {
  const result = subtract( 8, 3 )
  const expected = 5
  expect( result ).toBe( expected )
} )

test( 'Subtracts 2 negative numbers', () => {
  const result = subtract( -8, -3 )
  const expected = -5
  expect( result ).toBe( expected )
} )
