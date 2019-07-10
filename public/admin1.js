import { StyleSheet } from 'react-native';

export default StyleSheet.create({
  'body': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'height': [{ 'unit': '%V', 'value': 1 }]
  },
  'html': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'height': [{ 'unit': '%V', 'value': 1 }]
  },
  'top__bar': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'height': [{ 'unit': 'px', 'value': 70 }],
    'background': '#FF0000'
  },
  'p': {
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'string', 'value': 'auto' }, { 'unit': 'px', 'value': 0 }, { 'unit': 'string', 'value': 'auto' }]
  },
  'top__bar-hero span': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '300',
    'fontSize': [{ 'unit': 'px', 'value': 14 }],
    'textTransform': 'capitalize',
    'color': '#FFFFFF'
  },
  'home__img': {
    'width': [{ 'unit': 'px', 'value': 15 }]
  },
  'top__bar--main': {
    'width': [{ 'unit': '%H', 'value': 0.46 }],
    'display': 'flex',
    'height': [{ 'unit': '%V', 'value': 1 }],
    'alignItems': 'center'
  },
  'top__bar-hero': {
    'display': 'flex',
    'alignItems': 'center'
  },
  'dash__line': {
    'width': [{ 'unit': 'px', 'value': 5 }],
    'height': [{ 'unit': 'px', 'value': 1 }],
    'backgroundColor': 'white'
  },
  'mainContainer': {
    'display': 'flex',
    'justifyContent': 'flex-start',
    'width': [{ 'unit': '%H', 'value': 1 }],
    'overflowX': 'hidden'
  },
  'left__bar': {
    'width': [{ 'unit': 'px', 'value': 200 }],
    'height': [{ 'unit': 'vh', 'value': 100 }],
    'backgroundColor': 'rgba(31, 41, 50, 0.99)',
    'display': 'flex',
    'justifyContent': 'flex-start',
    'color': 'white',
    'fontFamily': 'poppins',
    'fontSize': [{ 'unit': 'px', 'value': 12 }],
    'transform': 'translateY(-70px)',
    'paddingLeft': [{ 'unit': 'px', 'value': 30 }],
    'position': 'fixed'
  },
  'left__bar--image': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'display': 'flex',
    'justifyContent': 'flex-end'
  },
  'left__menu--item': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'display': 'flex',
    'justifyContent': 'flex-start',
    'alignItems': 'center',
    'marginBottom': [{ 'unit': 'px', 'value': 30 }]
  },
  'left__menu--container': {
    'height': [{ 'unit': '%V', 'value': 1 }],
    'width': [{ 'unit': '%H', 'value': 1 }]
  },
  'left__menu--icon': {
    'width': [{ 'unit': 'px', 'value': 16 }],
    'marginRight': [{ 'unit': 'px', 'value': 12 }]
  },
  'left__menu--item span': {
    'marginLeft': [{ 'unit': 'px', 'value': 6 }]
  },
  'left__menu--container left__menu--item:nth-child(3)': {
    'marginBottom': [{ 'unit': 'px', 'value': 140 }]
  },
  'left__bar--image': {
    'width': [{ 'unit': 'px', 'value': 100 }],
    'margin': [{ 'unit': 'px', 'value': 30 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 30 }, { 'unit': 'px', 'value': 0 }]
  },
  'left__menu--container left__menu--item:nth-child(3) span::before': {
    'content': 'url(images/Frame.svg)',
    'position': 'absolute',
    'transform': 'translateX(-12px)'
  },
  'center__Container': {
    'width': [{ 'unit': '%H', 'value': 0.76 }],
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 40 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 40 }],
    'transform': 'translateX(230px)'
  },
  'center__Container span': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': 'bold',
    'fontSize': [{ 'unit': 'px', 'value': 18 }],
    'textAlign': 'justify',
    'textTransform': 'capitalize',
    'color': '#DBA834',
    'marginBottom': [{ 'unit': 'px', 'value': 20 }],
    'display': 'block'
  },
  'text__description': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': 'bold',
    'fontSize': [{ 'unit': 'px', 'value': 24 }],
    'textAlign': 'justify',
    'textTransform': 'capitalize',
    'color': '#333333',
    'marginBottom': [{ 'unit': 'px', 'value': 20 }]
  },
  'form__header--list': {
    'margin': [{ 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }],
    'paddingBottom': [{ 'unit': 'px', 'value': 10 }]
  },
  'form__header--list img': {
    'width': [{ 'unit': 'px', 'value': 12 }],
    'transform': 'translateX(-20px)'
  },
  'form__header--list span': {
    'display': 'inline-block',
    'transform': 'translateX(-10px)',
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }]
  },
  'form__header--list form__header--sub': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'flex-start',
    'marginBottom': [{ 'unit': 'px', 'value': 20 }]
  },
  'form__container': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'background': '#FFFFFF',
    'boxShadow': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'px', 'value': 23 }, { 'unit': 'string', 'value': 'rgba(255, 0, 0, 0.14)' }],
    'borderRadius': '8px'
  },
  'data__field input': {
    'width': [{ 'unit': '%H', 'value': 0.94 }],
    'margin': [{ 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }],
    'border': [{ 'unit': 'px', 'value': 1 }, { 'unit': 'string', 'value': 'solid' }, { 'unit': 'string', 'value': '#C4C4C4' }],
    'boxSizing': 'border-box',
    'borderRadius': '4px',
    'background': 'url(images/Group\ 2.4.svg)',
    'backgroundRepeat': 'no-repeat',
    'padding': [{ 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 10 }],
    'backgroundPosition': 'left',
    'backgroundPositionX': '10px'
  },
  'textarea': {
    'width': [{ 'unit': '%H', 'value': 0.94 }],
    'margin': [{ 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }],
    'border': [{ 'unit': 'px', 'value': 1 }, { 'unit': 'string', 'value': 'solid' }, { 'unit': 'string', 'value': '#C4C4C4' }],
    'boxSizing': 'border-box',
    'borderRadius': '4px',
    'background': 'url(images/Group\ 2.4.svg)',
    'backgroundRepeat': 'no-repeat',
    'padding': [{ 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 10 }, { 'unit': 'px', 'value': 10 }],
    'backgroundPosition': 'left',
    'backgroundPositionX': '10px'
  },
  'textarea__box': {
    'background': 'url(images/edit.svg)',
    'backgroundRepeat': 'no-repeat',
    'backgroundPosition': 'right',
    'height': [{ 'unit': 'px', 'value': 70 }],
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': 'normal',
    'fontSize': [{ 'unit': 'px', 'value': 14 }],
    'color': '#333333',
    'backgroundPositionY': '1px',
    'backgroundOrigin': 'content-box'
  },
  'data__field--1': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'display': 'flex',
    'justifyContent': 'center',
    'marginTop': [{ 'unit': 'px', 'value': -20 }]
  },
  'data__field': {
    'width': [{ 'unit': '%H', 'value': 1 }]
  },
  'featured__image': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'margin': [{ 'unit': '%V', 'value': 0.03 }, { 'unit': '%H', 'value': 0.03 }, { 'unit': '%V', 'value': 0.03 }, { 'unit': '%H', 'value': 0.03 }]
  },
  'featured__image img': {
    'width': [{ 'unit': '%H', 'value': 0.94 }],
    'marginBottom': [{ 'unit': '%V', 'value': 0.03 }]
  },
  'featured__image button': {
    'boxShadow': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'string', 'value': 'rgba(0, 0, 0, 0.25)' }],
    'background': '#DBA834',
    'borderRadius': '8px',
    'border': [{ 'unit': 'px', 'value': 0 }],
    'display': 'flex'
  },
  'button': {
    'height': [{ 'unit': 'px', 'value': 50 }],
    'width': [{ 'unit': 'px', 'value': 120 }],
    'padding': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }],
    'display': 'inline-block',
    'lineHeight': [{ 'unit': 'px', 'value': 50 }],
    'textAlign': 'justify',
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }],
    'boxShadow': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'string', 'value': 'rgba(0, 0, 0, 0.25)' }],
    'background': '#DBA834',
    'borderRadius': '8px',
    'border': [{ 'unit': 'px', 'value': 0 }]
  },
  'featured__image span': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '600',
    'fontSize': [{ 'unit': 'px', 'value': 12 }],
    'textTransform': 'uppercase',
    'color': '#FFFFFF',
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'string', 'value': 'auto' }, { 'unit': 'px', 'value': 0 }, { 'unit': 'string', 'value': 'auto' }]
  },
  'save__button--container span': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '600',
    'fontSize': [{ 'unit': 'px', 'value': 12 }],
    'textTransform': 'uppercase',
    'color': '#FFFFFF',
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'string', 'value': 'auto' }, { 'unit': 'px', 'value': 0 }, { 'unit': 'string', 'value': 'auto' }]
  },
  'save__button--container': {
    'display': 'flex',
    'width': [{ 'unit': '%H', 'value': 0.96 }],
    'justifyContent': 'flex-end'
  },
  'save__button--container button': {
    'background': '#FF0000',
    'borderRadius': '8px',
    'border': [{ 'unit': 'px', 'value': 0 }],
    'display': 'flex',
    'alignItems': 'center',
    'marginBottom': [{ 'unit': 'px', 'value': 50 }]
  },
  // styling for contact Us page
  'table__container': {
    'paddingTop': [{ 'unit': 'px', 'value': 40 }]
  },
  // styling for adminPAge/About Us
  'table__container': {
    'display': 'flex',
    'justifyContent': 'center',
    'width': [{ 'unit': '%H', 'value': 1 }]
  },
  'table__container--main': {
    'width': [{ 'unit': '%H', 'value': 0.6 }]
  },
  'tr': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'center',
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '300',
    'fontSize': [{ 'unit': 'px', 'value': 10 }],
    'lineHeight': [{ 'unit': 'px', 'value': 26 }],
    'textAlign': 'justify',
    'color': '#333333'
  },
  'td': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'center',
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '300',
    'fontSize': [{ 'unit': 'px', 'value': 10 }],
    'lineHeight': [{ 'unit': 'px', 'value': 26 }],
    'textAlign': 'justify',
    'color': '#333333'
  },
  'th': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'center',
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '300',
    'fontSize': [{ 'unit': 'px', 'value': 10 }],
    'lineHeight': [{ 'unit': 'px', 'value': 26 }],
    'textAlign': 'justify',
    'color': '#333333'
  },
  'th': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '600',
    'fontSize': [{ 'unit': 'px', 'value': 12 }],
    'textAlign': 'justify',
    'textTransform': 'uppercase'
  },
  'table': {
    'background': '#FFFFFF',
    'border': [{ 'unit': 'px', 'value': 1 }, { 'unit': 'string', 'value': 'solid' }, { 'unit': 'string', 'value': '#000000' }],
    'boxSizing': 'border-box',
    'boxShadow': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'px', 'value': 12 }, { 'unit': 'string', 'value': 'rgba(255, 0, 0, 0.1)' }],
    'borderRadius': '8px'
  },
  'aboutus__hero--container': {
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'flex-start',
    'width': [{ 'unit': '%H', 'value': 0.8 }]
  },
  'form__header--list1': {
    'display': 'flex',
    'width': [{ 'unit': '%H', 'value': 1 }],
    'alignItems': 'center'
  },
  'form__header--list1 p': {
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }]
  },
  'aboutus__hero--container span': {
    'fontSize': [{ 'unit': 'px', 'value': 14 }],
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '600',
    'fontSize': [{ 'unit': 'px', 'value': 10 }],
    'textTransform': 'uppercase',
    'color': '#FFFFFF',
    'transform': 'translateX(0px)'
  },
  'aboutus__hero--container button': {
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 20 }],
    'display': 'flex',
    'justifyContent': 'center',
    'alignItems': 'center'
  },
  // styling for editCountdown page
  'countdown__container--main': {
    'width': [{ 'unit': '%H', 'value': 1 }],
    'margin': [{ 'unit': 'px', 'value': 40 }, { 'unit': 'px', 'value': 40 }, { 'unit': 'px', 'value': 40 }, { 'unit': 'px', 'value': 40 }],
    'padding': [{ 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 20 }]
  },
  'program__items': {
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'flex-start'
  },
  'program__items input': {
    'background': '#C4C4C4',
    'borderRadius': '2px',
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '600',
    'fontSize': [{ 'unit': 'px', 'value': 16 }],
    'textAlign': 'justify',
    'textTransform': 'capitalize',
    'border': [{ 'unit': 'px', 'value': 0 }],
    'color': '#000000',
    'margin': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 0 }]
  },
  'program__items item__description': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '600',
    'fontSize': [{ 'unit': 'px', 'value': 14 }],
    'textAlign': 'justify',
    'textTransform': 'capitalize',
    'color': '#000000',
    'width': [{ 'unit': '%H', 'value': 0.1 }]
  },
  'save__button--container': {
    'margin': [{ 'unit': 'px', 'value': 100 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 100 }, { 'unit': 'px', 'value': 0 }]
  },
  // home.html page styling
  'home__menu--container': {
    'display': 'flex',
    'width': [{ 'unit': '%H', 'value': 1 }],
    'alignItems': 'flex-start',
    'justifyContent': 'space-between'
  },
  'left__home--menus': {
    'display': 'flex',
    'justifyContent': 'space-evenly',
    'flexDirection': 'column',
    'alignItems': 'center',
    'background': '#FFFFFF',
    'width': [{ 'unit': '%H', 'value': 0.45 }],
    'marginBottom': [{ 'unit': 'px', 'value': 100 }]
  },
  'right__home--menus': {
    'display': 'flex',
    'justifyContent': 'space-evenly',
    'flexDirection': 'column',
    'alignItems': 'center',
    'background': '#FFFFFF',
    'width': [{ 'unit': '%H', 'value': 0.45 }],
    'marginBottom': [{ 'unit': 'px', 'value': 100 }]
  },
  'left__home--item': {
    'display': 'flex',
    'flexDirection': 'column',
    'alignItems': 'center',
    'justifyContent': 'space-around',
    'boxShadow': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'px', 'value': 14 }, { 'unit': 'string', 'value': 'rgba(255, 0, 0, 0.22)' }],
    'borderRadius': '6px',
    'width': [{ 'unit': '%H', 'value': 1 }],
    'height': [{ 'unit': 'px', 'value': 250 }],
    'margin': [{ 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }]
  },
  'right__home--item': {
    'display': 'flex',
    'flexDirection': 'column',
    'alignItems': 'center',
    'justifyContent': 'space-around',
    'boxShadow': [{ 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 4 }, { 'unit': 'px', 'value': 14 }, { 'unit': 'string', 'value': 'rgba(255, 0, 0, 0.22)' }],
    'borderRadius': '6px',
    'width': [{ 'unit': '%H', 'value': 1 }],
    'height': [{ 'unit': 'px', 'value': 250 }],
    'margin': [{ 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }, { 'unit': 'px', 'value': 20 }, { 'unit': 'px', 'value': 0 }]
  },
  'homepage__img': {
    'width': [{ 'unit': 'px', 'value': 200 }]
  },
  '#aboutscc__img': {
    'width': [{ 'unit': 'px', 'value': 180 }]
  },
  'left__home--item': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': 'bold',
    'fontSize': [{ 'unit': 'px', 'value': 16 }],
    'lineHeight': [{ 'unit': 'px', 'value': 44 }],
    'textAlign': 'justify',
    'textTransform': 'capitalize',
    'color': '#333333'
  },
  'right__home--item p': {
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': 'bold',
    'fontSize': [{ 'unit': 'px', 'value': 16 }],
    'lineHeight': [{ 'unit': 'px', 'value': 44 }],
    'textAlign': 'justify',
    'textTransform': 'capitalize',
    'color': '#333333'
  },
  // Edit Link Styling
  'edit__home--container': {
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'space-around',
    'flexDirection': 'column',
    'width': [{ 'unit': '%H', 'value': 1 }],
    'height': [{ 'unit': 'px', 'value': 250 }]
  },
  'home__button--big button': {
    'width': [{ 'unit': 'px', 'value': 800 }]
  },
  'home__button--big': {
    'height': [{ 'unit': 'px', 'value': 125 }],
    'display': 'flex',
    'alignItems': 'flex-end',
    'justifyContent': 'flex-end'
  },
  'edit__home--container button': {
    'display': 'flex',
    'alignItems': 'center',
    'justifyContent': 'center',
    'background': '#FFFFFF',
    'border': [{ 'unit': 'px', 'value': 1 }, { 'unit': 'string', 'value': 'solid' }, { 'unit': 'string', 'value': '#C4C4C4' }],
    'fontFamily': 'Poppins',
    'fontStyle': 'normal',
    'fontWeight': '600',
    'fontSize': [{ 'unit': 'px', 'value': 24 }],
    'lineHeight': [{ 'unit': 'px', 'value': 44 }],
    'textAlign': 'justify',
    'textTransform': 'uppercase',
    'color': '#000000'
  },
  'submit__button--container span': {
    'fontSize': [{ 'unit': 'em', 'value': 0.6 }],
    'color': 'white'
  },
  'submit__button--container button': {
    'background': 'red'
  },
  'home__menu--container a': {
    'textDecoration': 'none'
  }
});
