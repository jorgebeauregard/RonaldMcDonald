import React from 'react';
import ChildComponent from './ChildComponent';
import Enzyme from 'enzyme';
import Adapter from 'enzyme-adapter-react-16';
import { shallow } from 'enzyme';

Enzyme.configure({ adapter: new Adapter() });

it('renders name of the child', () => {
  const child = shallow(<ChildComponent/>);
  expect(child.find('child_name').length).toEqual(1);
});
