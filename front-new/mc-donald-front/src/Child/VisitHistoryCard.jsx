import React from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';

const VisitHistoryCard = () => {
    return ( 
        <div className="card">
            <div className="card-content">
                <TitleCardSmall title="Historial de visitas" background="link"></TitleCardSmall>
                <table className="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Fecha de ingreso</th>
                            <th>Fecha de salida</th>
                            <th>Doctor</th>
                            <th>Diagnóstico</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    );
}
 
export default VisitHistoryCard;
