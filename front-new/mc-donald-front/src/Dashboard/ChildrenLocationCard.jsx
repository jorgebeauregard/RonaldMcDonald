import React from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall'


const ChildrenLocationCard = (props) => {
    return ( 
        <div className="card">
            <div className="card-content">
                <TitleCardSmall title={props.title} background={props.background}/>
                <table className="table is-fullwidth margin-top is-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Habitación</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        {kids}
                    </tbody>
                </table>
            </div>
        </div> 
    );
}
 
export default ChildrenLocationCard;